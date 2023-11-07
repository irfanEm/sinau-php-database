<?php 

namespace Repository {

    use Model\Comment;
    use PDO;

    interface CommentRepository {
        public function insert(Comment $comment): Comment;
        public function findById(int $id): ?Comment;
        public function findAll(): array;
    }

    class CommentRepositoryImpl implements CommentRepository
    {
        public function __construct(private PDO $connection) {}

        public function insert(Comment $comment): Comment
        {
            $sql = "INSERT INTO coments (email, coment) VALUES (?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$comment->getEmail(), $comment->getComment()]);

            $id = $this->connection->lastInsertId();
            $comment->setId($id);

            return $comment;
        }

        public function findById(int $id): ?Comment
        {
            $sql = "SELECT * FROM coments WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);

            if($row = $statement->fetch()){
                return new Comment(
                    id: $row["id"],
                    email: $row["email"],
                    comment: $row["comment"]
                );
            }
        }

        public function findAll() : array
        {
            $sql = "SELECT * FROM coments";
            $statement = $this->connection->query($sql);

            $array = [];
            while($row = $statement->fetch()){
                $array[] = new Comment(
                    id: $row["id"],
                    email: $row["email"],
                    comment: $row["comment"]
                );
            }

            return $array;
        }
    }
}