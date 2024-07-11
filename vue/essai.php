<?php

/**
 * Class to handle articles
 */

class Comment
{
  // Properties

  /**
  * @var int The article ID from the database
  */
  public $id = null;

  /**
  * @var int When the article is to be / was first published
  */
  public $publicationDate = null;

  /**
  * @var string Full title of the article
  */
  public $title = null;

  /**
  * @var string The HTML content of the article
  */
  public $content = null;

    /**
     * @var int The article ID from the database
     */
    public $articleid = null;


  /**
  * Sets the object's properties using the values in the supplied array
  *
  * @param assoc The property values
  */

  public function __construct( $data=array() ) {
    if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
    if ( isset( $data['publicationDate'] ) ) $this->publicationDate = (int) $data['publicationDate'];
    if ( isset( $data['title'] ) ) $this->title = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['title'] );
    if ( isset( $data['content'] ) ) $this->content = $data['content'];
      if ( isset( $data['articleid'] ) ) $this->articleid = (int) $data['articleid'];
  }


  /**
  * Sets the object's properties using the edit form post values in the supplied array
  *
  * @param assoc The form post values
  */

  public function storeFormValues( $params ) {

    // Store all the parameters
    $this->__construct( $params );

    // Parse and store the publication date
    if ( isset($params['publicationDate']) ) {
      $publicationDate = explode ( '-', $params['publicationDate'] );

      if ( count($publicationDate) == 3 ) {
        list ( $y, $m, $d ) = $publicationDate;
        $this->publicationDate = mktime ( 0, 0, 0, $m, $d, $y );
      }
    }
  }


  public static function getById( $id ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT *, UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM comments WHERE id = :id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":id", $id, PDO::PARAM_INT );
    $st->execute();
    $row = $st->fetch();
    $conn = null;
    if ( $row ) return new Comment( $row );
  }


  /**
  * Returns all (or a range of) Article objects in the DB
  *
  * @param int Optional The number of rows to return (default=all)
  * @param string Optional column by which to order the articles (default="publicationDate DESC")
  * @return Array|false A two-element array : results => array, a list of Article objects; totalRows => Total number of articles
  */

    public static function getList( $art=1, $order="publicationDate DESC", $numRows=10000 ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT SQL_CALC_FOUND_ROWS *, UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM comments WHERE articleid = :art 
        ORDER BY " . mysql_escape_string($order) . " LIMIT :numRows";

    $st = $conn->prepare( $sql );
    $st->bindValue( ":art", $art, PDO::PARAM_INT );
    $st->execute();
    $list = array();

    while ( $row = $st->fetch() ) {
      $comments = new Comment( $row );
      $list[] = $comment;
    }
  }


  /**
  * Inserts the current Article object into the database, and sets its ID property.
  */

  public function insert() {

    // Insert the Article
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "INSERT INTO comments ( publicationDate, title, content, articledid ) VALUES ( FROM_UNIXTIME(:publicationDate), :title, :content, :articleid )";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":publicationDate", $this->publicationDate, PDO::PARAM_INT );
    $st->bindValue( ":title", $this->title, PDO::PARAM_STR );
    $st->bindValue( ":content", $this->content, PDO::PARAM_STR );
    $st->bindValue( ":articleid", $this->articleid, PDO::PARAM_STR );
    $st->execute();
    $this->id = $conn->lastInsertId();
    $conn = null;
  }


  /**
  * Updates the current Article object in the database.
  */

  public function update() {

    // Update the Article
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "UPDATE comments SET publicationDate=FROM_UNIXTIME(:publicationDate), title=:title, summary=:summary, content=:content, articleid=:articleid,imageExtension=:imageExtension WHERE id = :id";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":publicationDate", $this->publicationDate, PDO::PARAM_INT );
    $st->bindValue( ":title", $this->title, PDO::PARAM_STR );
    $st->bindValue( ":content", $this->content, PDO::PARAM_STR );
      $st->bindValue( ":articleid", $this->articleid, PDO::PARAM_STR );
    $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
  }


  /**
  * Deletes the current Article object from the database.
  */

  public function delete() {


    // Delete the Article
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare ( "DELETE FROM comments WHERE id = :id LIMIT 1" );
    $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
  }

}

?>