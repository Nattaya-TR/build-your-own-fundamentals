<?php
declare(strict_types=1);

class Article {
    private int $articleID;
    private string $title;
    private string $slug;
    private string $content;

    public function __construct(int $articleID, string $title, string $slug, string $content) {

        $this->articleID = $articleID;
        $this->title = $title;
        $this->slug = $slug;
        $this->content = $content;
    }

    public static function loadArticleDB(int $articleID, string $title, string $slug, string $content) : Article
    {
        $article = new Article($articleID, $title, $slug, $content);
        $article->articleID = $articleID;
        return $article;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

}
