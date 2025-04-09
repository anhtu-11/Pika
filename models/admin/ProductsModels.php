<?php
require_once '../connect/connect.php';

class ProductsAdminModle extends Connect
{
    public function listCategoriesAdmin()
    {
        $sql = 'SELECT * FROM category';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function listProducts()
    {
        $sql = "SELECT
            products.product_id AS product_id,
            products.name AS product_name,
            products.price AS product_price,
            products.sale_price AS product_sale_price,
            products.image AS product_image,
            category.category_id AS category_id,
            category.name AS category_name,
            brands.brand_id AS brand_id,
            brands.name AS brand_name,
            product_variants.product_id AS product_variant_id,
            COALESCE(variant_colors.color_name, '') AS variant_color_name,
            favorites.user_id AS favorite_user_id 
        FROM products
        LEFT JOIN category ON products.category_id = category.category_id
        LEFT JOIN brands ON products.brand_id = brands.brand_id
        LEFT JOIN product_variants ON products.product_id = product_variants.product_id
        LEFT JOIN variant_colors ON product_variants.variant_color_id = variant_colors.variant_color_id
        LEFT JOIN favorites ON products.product_id = favorites.product_id";


        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $listProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $groupedProducts = [];
        foreach ($listProducts as $product) {
            $product_id = $product['product_id'];
            if (!isset($groupedProducts[$product_id])) {
                $groupedProducts[$product_id] = [
                    'product_id' => $product['product_id'],
                    'product_name' => $product['product_name'],
                    'product_price' => $product['product_price'],
                    'product_sale_price' => $product['product_sale_price'],
                    'product_image' => $product['product_image'],
                    'category_id' => $product['category_id'],
                    'category_name' => $product['category_name'],
                    'brand_name' => $product['brand_name'],
                    'favorite_user_id' => $product['favorite_user_id'],
                    'variants' => [] // Mảng chứa các biến thể
                ];
            }
            // Thêm biến thể (variant) vào mảng `variants`
            $groupedProducts[$product_id]['variants'][] = [
                'product_variant_color' => $product['variant_color_name']
            ];
        }

        return $groupedProducts;
    }



    public function getAllCategories()
    {
        $sql = 'SELECT * FROM category';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllProductByCate($category_id)
    {
        $sql = 'SELECT p.product_id, p.name, p.description, p.price, p.image, c.name AS category_name, b.name AS brand_name, f.user_id AS favorite_user_id
            FROM products p
            JOIN category c ON p.category_id = c.category_id
            JOIN brands b ON p.brand_id = b.brand_id
            LEFT JOIN favorites f ON p.product_id = f.product_id 
            WHERE c.category_id = :category_id';
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }



    public function getAllBrands()
    {
        $sql = 'SELECT * FROM brands';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllColors()
    {
        $sql = 'SELECT * FROM variant_colors';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addProductsModle($name, $category_id, $brand_id, $price, $sale_price, $description, $image, $slug)
    {
        $sql = "INSERT INTO products(name, category_id, brand_id, price, sale_price, description, image, slug, created_at) VALUES (?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$name, $category_id, $brand_id, $price, $sale_price, $description, $image, $slug]);
    }

    public function addProducts_Variant($product_id, $variant_color_id, $variant_price, $variant_sale_price, $quantity)
    {
        $sql = "INSERT INTO product_variants(product_id, variant_color_id, variant_price, variant_sale_price, quantity, created_at) VALUES (?,?,?,?,?,CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$product_id, $variant_color_id, $variant_price, $variant_sale_price, $quantity]);
    }

    public function addProduct_Gallery($product_id, $gallery_image)
    {
        $sql = "INSERT INTO product_galleries(product_id,gallery_image, created_at) VALUES (?,?,CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$product_id, $gallery_image]);
    }

    public function getLastInsertId()
    {
        try {
            $connection = $this->connect();
            return $connection->lastInsertId();
        } catch (PDOException $e) {
            error_log("Lỗi khi lấy ID sản phầm vừa thêm: " . $e->getMessage());
            return null;
        }
    }

    public function getProductById($product_id)
    {
        $sql = "
            SELECT 
                products.product_id AS product_id,
                products.name AS product_name,
                products.price AS product_price,
                products.sale_price AS product_sale_price,
                products.image AS product_image,
                products.description AS product_description,
                products.slug AS product_slug,
                category.category_id AS category_id,
                category.name AS category_name,
                brands.brand_id AS brand_id,
                brands.name AS brand_name
            FROM products
            LEFT JOIN brands ON products.brand_id = brands.brand_id
            LEFT JOIN category ON products.category_id = category.category_id
            WHERE products.product_id = ?";


        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getProductVariantByid($product_id)
    {
        $sql = "
        SELECT 
            product_variants.variant_id AS variant_id,
            product_variants.variant_price AS variant_price,
            product_variants.variant_sale_price AS variant_sale_price,
            product_variants.quantity AS variant_quantity,
            variant_colors.variant_color_id AS variant_color_id,
            variant_colors.color_name AS variant_color_name,
            variant_colors.color_code as variant_color_code
        FROM product_variants
        LEFT JOIN variant_colors ON product_variants.variant_color_id = variant_colors.variant_color_id WHERE product_variants.product_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductGalleryByid($product_id)
    {
        $sql = "SELECT * FROM product_galleries WHERE product_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateProduct($product_id, $name, $category_id, $brand_id, $price, $sale_price, $description, $image, $slug)
    {
        $sql = "UPDATE products 
            SET name = ?, category_id = ?, brand_id = ?, price = ?, sale_price = ?, description = ?, image = ?, slug = ?, updated_at = CURRENT_TIMESTAMP
            WHERE product_id = ?";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$name, $category_id, $brand_id, $price, $sale_price, $description, $image, $slug, $product_id]);
    }
    public function updateVariant($variant_id, $product_id, $variant_color_id, $variant_price, $variant_sale_price, $quantity)
    {
        $sql = "UPDATE product_variants 
            SET product_id=?, variant_color_id = ?, variant_price = ?, variant_sale_price = ?, quantity = ?, update_at = CURRENT_TIMESTAMP 
            WHERE variant_id = ?";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$product_id, $variant_color_id, $variant_price, $variant_sale_price, $quantity, $variant_id]);
    }
    public function updateGallery($product_id, $gallery_image)
    {
        $sql = "UPDATE product_galleries 
            SET gallery_image = ?, updated_at = CURRENT_TIMESTAMP 
            WHERE product_id = ?";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$gallery_image, $product_id]);
    }

    public function getNewProduct()
    {
        $sql = "
        SELECT 
            p.*, 
            c.name AS category_name, 
            b.name AS brand_name 
        FROM 
            products p
        LEFT JOIN category c ON p.category_id = c.category_id
        LEFT JOIN brands b ON p.brand_id = b.brand_id
        ORDER BY p.created_at DESC 
        LIMIT 2";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }




}