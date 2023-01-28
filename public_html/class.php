<?php
class Q
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function getAll()
    {

        $sql = 'SELECT * FROM article';

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        $article = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $article;
}

}