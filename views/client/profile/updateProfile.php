<?php include '../views/client/profile/layout/header.php' ?>
<?php include '../views/client/profile/layout/sidebar.php' ?>

<div class="page-body">
    <div class="title-header">
        <h5>Thông tin cá nhân</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <!-- Tổng quan số liệu -->
                    <div class="card-body row mb-4">
                        <!-- Total Orders -->
                        <div class="col-md-4">
                            <div class="card text-center bg-dark text-white mb-3">
                                <div class="card-body">
                                    <i class="bi bi-box" style="font-size: 2rem;"></i>
                                    <h5 class="card-title mt-2">3648</h5>
                                    <p class="card-text">Total Orders</p>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Orders -->
                        <div class="col-md-4">
                            <div class="card text-center bg-dark text-white mb-3">
                                <div class="card-body">
                                    <i class="bi bi-clock-history" style="font-size: 2rem;"></i>
                                    <h5 class="card-title mt-2">215</h5>
                                    <p class="card-text">Pending Orders</p>
                                </div>
                            </div>
                        </div>
                        <!-- Wishlist -->
                        <div class="col-md-4">
                            <div class="card text-center bg-dark text-white mb-3">
                                <div class="card-body">
                                    <i class="bi bi-heart" style="font-size: 2rem;"></i>
                                    <h5 class="card-title mt-2">63874</h5>
                                    <p class="card-text">Wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Thông tin chi tiết -->
                    <div class="card-body">
                        <!-- Contact and Newsletters -->
                        <div class="row mt-4"> <!-- Thêm lớp mt-4 để tạo khoảng cách -->
                            <!-- Contact Information -->
                            <div class="col-md-6 mb-4">
                                <h5><strong>CONTACT:</strong></h5>
                                <p>
                                    <strong>Email:</strong><?= $user['email'] ?><br>
                                    <strong>Phone:</strong>
                                    <?= !empty($user['phone']) ? $user['phone'] : 'N/A' ?>
                                </p>
                                <a href="#" class="text-danger" data-bs-toggle="modal"
                                    data-bs-target="#manageContactModal">Manage Contact</a>
                            </div>
                            <!-- Newsletters -->
                            <div class="col-md-6 mb-4">
                                <h5><strong>AVATAR</strong></h5>
                                <img src="./images/avatar/<?= $user['avatar'] ?>" alt="N/A"
                                    style="width: 400px; height: 400px;"><br>

                                <a href="#" class="text-danger" data-bs-toggle="modal"
                                    data-bs-target="#manageAvatarModal">Manage Avatar</a>
                            </div>
                        </div>

                        <!-- Address Book -->
                        <div class="row mt-4">
                            <!-- Default Billing Address -->
                            <div class="col-md-6 mb-4">
                                <h5><strong>Address:</strong></h5>
                                <p><?= !empty($user['address']) ? $user['address'] : 'N/A' ?></p>
                                <a href="#" class="text-danger" data-bs-toggle="modal"
                                    data-bs-target="#manageAddressModal">Manage Address</a>
                            </div>
                            <div class="col-md-6 mb-4">
                                <a href="#" class="text-danger" data-bs-toggle="modal"
                                    data-bs-target="#changePasswordModal">Change Passwrod</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Du an mau nhom 5</p>
                </div>
            </div>
        </footer>
    </div>
</div>


<!-- Modal for Managing Contact -->
<div class="modal fade" id="manageContactModal" tabindex="-1" aria-labelledby="manageContactModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="manageContactModalLabel">Manage Contact Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="?act=update-contact-user" method="post">
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" name="email"
                            value="<?= $user['email'] ?>">
                        <?php if (isset($_SESSION['errors']['email'])): ?>
                            <p class="text-danger"><?= $_SESSION['errors']['email'] ?></p>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phoneInput" name="phone"
                            value="<?= $user['phone'] ?>">
                        <?php if (isset($_SESSION['errors']['phone'])): ?>
                            <p class="text-danger"><?= $_SESSION['errors']['phone'] ?></p>
                        <?php endif ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="update_contact">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Changing Password -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="currentPassword"
                            value="<?= $user['password'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="newPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="confirmPassword" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</but>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Managing Avatar -->
<div class="modal fade" id="manageAvatarModal" tabindex="-1" aria-labelledby="manageAvatarModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="manageAvatarModalLabel">Manage Avatar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="?act=manage-avatar" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="avatarUpload" class="form-label">Upload New Avatar</label>
                        <input type="file" class="form-control" id="avatarUpload" accept="image/*" name="avatar">
                    </div>
                    <div class="mb-3">
                        <img id="previewAvatar" src="./images/default-avatar.png" alt="Avatar Preview" class="img-fluid"
                            style="max-height: 200px;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="avatar">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal for Managing Address -->
<div class="modal fade" id="manageAddressModal" tabindex="-1" aria-labelledby="manageAddressModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="manageAddressModalLabel">Manage Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="?act=manage-address " method="post">
                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Address</label>
                        <input type="text" class="form-control" id="addressInput" name="address"
                            value="<?= !empty($user['address']) ? $user['address'] : ''; ?>" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="update_address">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<?php include '../views/client/profile/layout/footer.php' ?>

<script>
    document.getElementById('avatarUpload').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('previewAvatar').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });
</script>