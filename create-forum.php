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

<!-- Main --> 
<div id="contents"  class="site-width">
    <section>
        <div id="">
            <p class="question">質問作成</p>
        </div>
    </section>
    <section id="main">
        <form name="" method="post">
          <div>
          　<h1>◾タイトル</h1>
            <input type="text" name="title" style="width: 900px;" placeholder="(例)●●の仕方が分かりません。">
          </div>
          <div>
        　  <h1>◾質問内容</h1>
            <textarea name="content" style="height: 300px;" placeholder="(例)○○で●●の使い方を使うことになったのですが、●●の使い方が分からず、▲▲から進みません。●●の使い方を教えて下さい。"></textarea>
          </div>
          <div class="forum-button">   
            <button type="button" onclick="location.href='index.php'" class="btn-f btn--color">戻る</button>         
            <button type="button" onclick="location.href='login.php'" class="btn-f btn--color" style="margin-left: 10px;">送信</button> 
          </div>
        </form>
    </section>
</div>

<!-- footer -->
<?php
  require('footer.php'); 
?>