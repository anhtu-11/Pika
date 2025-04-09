<?php
require_once '../models/admin/CommentModels.php';

class CommentsAdminController extends CommentAdminModels
{
    public function listComments()
    {
        $comments = $this->getAllComments();
        include '../views/admin/comments/listComments.php';
    }

    public function editStatusComment()
    {
        if (isset($_POST['comment_id'])) {
            $comment_id = $_POST['comment_id'];

            $result = $this->editStatus($comment_id);

            if ($result) {
                header('Location: index.php?act=listComments');
                exit;
            } else {
                $_SESSION['errors'] = 'Lỗi khi cập nhật trạng thái bình luận.';
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit;
            }
        } else {
            header('Location: index.php?act=listComments');
            exit;
        }
    }
}
