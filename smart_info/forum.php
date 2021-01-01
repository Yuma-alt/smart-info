<?php
// 共通関数の読み込み
require('function.php');

// ここでDBからデータを取得する
?>

<?php
  require('head.php');
?>

<!-- header -->
<body>
  <?php
    require('header.php');
  ?>
</body>

<div id="contents"  class="site-width">
    <section>
        <div id="">
            <span class="question">Q&A</span>
            <button onclick="location.href='create-forum.php'" class="btn-q btn--color">Q&A作成</button>  
        </div>
        <div>
            <p>スマホに関して分からないことがあれば質問してみよう！</p>  
        </div>
    </section>
  <!-- Main --> 
    <section id="main">
        <form name="" method="post">
        　<h1>◾️最近の質問</h1>
        </form>
    </section>
</div>

<!-- footer -->
<?php
  require('footer.php'); 
?>