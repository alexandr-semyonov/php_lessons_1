<?php


class Article
{
  protected $articleId;
  protected $articleHeader;
  protected $article;
  public function __construct(int $articleId, string $articleHeader, string $article)
  {
    $this->articleId = $articleId;
    $this->articleHeader = $articleHeader;
    $this->article = $article;
  }

  public function getArticleId()
  {
    return $this->articleId;
  }

  public function getArticleHeader()
  {
    return $this->articleHeader;
  }

  public function getArticle()
  {
    return $this->article;
  }
}