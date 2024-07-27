<?php
require_once  "$basePath/src/.api.php";

// Conexión con la base de datos
$conn = new mysqli('localhost', $sqlUser, $sqlPass, $sqlDB);
$conn->set_charset('utf8');

if ($conn->connect_error) {
    die("Error connecting to database: $conn->connect_error");
}

// Clase para manejar la lista publicaciones
class postLink {
    public $slug, $title;
    public $description;
    public $imageLg;
    public $imageMd;
    public $imageAlt;
    public $publishedAt;

    function __construct($slug, $title, $description, $imageLg, $imageMd, $imageAlt, $publishedAt) {
        $this->slug = $slug;
        $this->title = $title;
        $this->description = $description;
        $this->imageLg = $imageLg;
        $this->imageMd = $imageMd;
        $this->imageAlt = $imageAlt;
        $this->publishedAt = $publishedAt;
    }
}

// Clase para manejar las publicaciones
class post {
    public $id;
    public $userId;
    public $slug;
    public $title;
    public $image;
    public $imageAlt;
    public $body;
    public $ctaId;
    public $publishedAt;
    public $updatedAt;

    function __construct($id, $userId, $slug, $title, $image, $imageAlt, $body, $ctaId, $publishedAt, $updatedAt) {
        $this->id =  $id;
        $this->userId =  $userId;
        $this->slug =  $slug;
        $this->title =  $title;
        $this->image =  $image;
        $this->imageAlt =  $imageAlt;
        $this->body =  $body;
        $this->ctaId =  $ctaId;
        $this->publishedAt =  $publishedAt;
        $this->updatedAt =  $updatedAt;
    }
}

// Clase para manejar la metainformación
class meta {
    public $id;
    public $title;
    public $description;
    public $sections;
    public $image;
    public $imageTwitter;

    function __construct($id, $title, $description, $sections, $image, $imageTwitter) {
        $this->id =  $id;
        $this->title =  $title;
        $this->description = $description;
        $this->sections = $sections;
        $this->image =  $image;
        $this->imageTwitter =  $imageTwitter;
    }
}

// Clase para manejar usuarios
class user {
    public $id;
    public $name;

    function __construct($id, $name) {
        $this->id =  $id;
        $this->name =  $name;
    }
}

// Clase para manejar las CTAs
class cta {
    public $id;
    public $name;
    public $slug;
    public $title;
    public $imageLg;
    public $imageMd;
    public $imageSm;
    public $imageAlt;

    function __construct($id, $name, $slug, $title, $imageLg, $imageMd, $imageSm, $imageAlt) {
        $this->id =  $id;
        $this->name =  $name;
        $this->slug =  $slug;
        $this->title =  $title;
        $this->imageLg =  $imageLg;
        $this->imageMd =  $imageMd;
        $this->imageSm =  $imageSm;
        $this->imageAlt =  $imageAlt;
    }
}

// Devuelve todas las publicaciones
function getPublishedPosts() {
    global $conn;
    $postsList = [];

    $result = $conn->query("SELECT slug, title, description, image_lg, image_md, image_alt, published_at  FROM posts WHERE is_published")->fetch_all(MYSQLI_ASSOC);

    foreach ($result as $item) {
        $resultObj = new postLink($item['slug'], $item['title'], $item['description'], $item['image_lg'], $item['image_md'], $item['image_alt'], $item['published_at']);
        array_push($postsList, $resultObj);
      }

    return $postsList;
}

// Devuelve una publicación
function getPost($uri) {
    global $conn;

    $res = $conn->query("SELECT * FROM posts WHERE is_published AND slug='$uri'")->fetch_assoc();
    $post = new post ($res['id'], $res['user_id'], $res['slug'], $res['title'], $res['image_lg'], $res['image_alt'], $res['body'], $res['cta_id'], $res['published_at'], $res['updated_at']);

    $res = $conn->query("SELECT * FROM metas WHERE post_id=$post->id")->fetch_assoc();
    $sections = explode(';', $res['sections']);
    $meta = new meta ($res['post_id'], $res['title'], $res['description'], $sections, $res['image'], $res['image_twitter']);

    $res = $conn->query("SELECT id, name FROM users WHERE id=$post->userId")->fetch_assoc();
    $user = new user ($res['id'], $res['name']);

    $cta = NULL;
    if (isset($post->ctaId)) {
        $cta = $conn->query("SELECT * FROM ctas WHERE id=$post->ctaId")->fetch_assoc();
    } else {
        $cta = $conn->query("SELECT * FROM ctas WHERE id=1")->fetch_assoc();
    }
    $ctaObj = new cta ($cta['id'], $cta['name'], $cta['slug'], $cta['title'], $cta['image_lg'], $cta['image_md'], $cta['image_sm'], $cta['image_alt']);

    return [$post, $meta, $user, $ctaObj];
}

// Devuelve las publicaciones destacadas
function getFeaturedPosts() {
    global $conn;

    $sql = 'SELECT * FROM featured_posts';
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($result, MYSQL_ASSOC);

    return $data;
}