


// 顧客詳細画面でタブを押したときの処理
$(".customer-show-tab").click(function() {
  // 何個目をクリックしたか
  var indexTab = $(".customer-show-tab").index(this);
  // タブをループしてactiveクラスを付け替える
  $(".customer-show-tab").each(function(i, elem) {
    if(i == indexTab){
      $(this).addClass("active");
    }else{
      $(this).removeClass("active");
    }
  });

  // クリックしたタブの詳細要素だけ表示させる
  $(".customer-show-detail").each(function(di, elem) {
    if(di == indexTab){
      $(this).fadeIn('200', function() {});
    }else{
      $(this).hide();
    }
  });
});