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
            <p class="question">質問作成</p>
        </div>
    </section>
  <!-- Main --> 
    <section id="main">
        <form name="" method="post">
          <div>
          　<h1>◾タイトル</h1>
            <input type="text" name="title" placeholder="(例)●●の仕方が分かりません。">
          </div>
          <div>
        　  <h1>◾質問内容</h1>
            <textarea name="content" placeholder="(例)○○で●●の使い方を使うことになったのですが、●●の使い方が分からず、▲▲から進みません。●●の使い方を教えて下さい。"></textarea>
          </div>
        </form>
    </section>
</div>

<!-- footer -->
<?php
  require('footer.php'); 
?>