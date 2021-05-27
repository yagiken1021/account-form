<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>アカウント登録画面</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form method="post" action="regist_confirm.php">
        <label>姓</label>
        <br>
        <input type="text" size="10" name="family_name" pattern="[\u4E00-\u9FFF\u3040-\u309F―]*" required autofocus value="<?php if(!enpty($_POST['famiry_name'])){echo $_POST['family_name']}?>">
        <br>
        <p id="notice-input-family_name" style="display:none; color:red;">姓が未入力です</p>
        <label>名</label>
        <br>
        <input type="text" size="10" name="last_name" pattern="[\uu4E00-\u9FFF\u3040-\U309F―]*" required autofocus value="<?php if(!enpty($_POST['last_name'])){echo $_POST['last_name']}?>">
        <br>
        <p id="notice-input-last_name" style="display:none; color:red;">名が未入力です</p>
        <label>姓(カナ）</label>
        <br>
        <input type="text" size="10" name="family_name_kana" pattern="(?=.:?[_u3041-_u30FA])[_u30A1\U30FC]" required autofocus value="<?php if(!enpty($_POST['famiry_name_kana'])){echo $_POST['family_name_kana']}?>">
        <br>
        <p id="notice-input-family_name_kana" style="display:none; color:red;">姓（カナ）が未入力です</p>
        <label>名（カナ）</label>
        <br>
        <input type="text" size="10" name="last_name_kana" pattern="(?=.:?[_u3041-_u30FA])[_u30A1\U30FC]" required autofocus　value="<?php if(!enpty($_POST['last_name_kana'])){echo $_POST['last_name_kana']}?>">
        <br>
        <p id="notice-input-last_name_kana" style="display:none; color:red;">名（カナ）が未入力です</p>
        <label>メールアドレス</label>
        <br>
        <input type="email" size="100" name="mail" required autofocus value="<?php if(!enpty($_POST['mail'])){echo $_POST['mail']}?>">
        <br>
        <p id="notice-input-mail" style="display:none; color:red;">メールアドレスが未入力です</p>
        <label>パスワード</label>
        <br>
        <input type="password" size="10" name="pasword" required autofocus value="<?php if(!enpty($_POST['password'])){echo $_POST['password']}?>">
        <br>
        <p id="notice-input-password" style="display:none; color:red;">パスワードが未入力です</p>
        <label>性別</label>
        <br>
        <input type="radio" name="gender" checked required autofocus>男
        <input type="radio" name="gender" required autofocus>女
        <br>
        <p id="notice-input-gender" style="display:none; cokor:red;">性別が未入力です</p>
        <label>郵便番号</label>
        <br>
        <input type="number" size="10" name="postal_code" required autofocus>
        <br>
        <p id="notice-input-postal_code" style="display:none; color:red;">郵便番号が未入力です</p>
        <label>住所（都道府県）</label>
        <br>
        <select name="prefecture">
            <option value="" selected>都道府県</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
        </select>
        <br>
        <p id="notice-select-prefecture" style="display:none; color:red;">住所（都道府県）が未入力です</p>
        <label>住所（市区町村）</label>
        <br>
        <input type="text" size="10" name="address1" pattern="[^\x20-\x7E]*" required autofocus value="<?php if(!enpty($_POST['address1'])){echo $_POST['address1']}?>">
        <br>
        <p id="notice-input-address1" style="display:none; color:red;">住所（市区町村）が未入力です</p>
        <label>住所（番地）</label>
        <br>
        <input type="text" size="10" name="address2" pattern="[^\x20-\x7E]*" required autofocus value="<?php if(!enpty($_POST['address2'])){echo $_POST['address2']}?>">
        <br>
        <p id="notice-input-address2" style="display:none; color:red;">住所（番地）が未入力です</p>
        <label>管理者権限</label>
        <br>
        <select name="authority" value="<?php if(!enpty($_POST['authority'])){echo $_POST['authority']}?>">
            <option value="一般" selected>一般</option>
            <option value="管理者">管理者</option>
        </select>
        <p id="notice-select-autority" style="display:none; coler:red;">管理者権限が未入力です</p>
        <input type="submit" value="登録する">
    </form>
</body>

</html>
