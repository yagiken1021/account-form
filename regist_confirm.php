<!DOCTYPE htmel>
<html>

<head>
    <meta charset="utf-8">
</head>
<title>アカウント登録確認画面</title>

<body>
    <?php
    $family_name=$_POST['family_name'];
    $last_name=$_POST['last_name'];
    $family_name_kana=$_POST['family_name_kana'];
    $last_name_kana=$_POST['last_name_kana'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $postal_code=$_POST['postal_code'];
    $prefecture=$_POST['prefecture'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    authoriry=$_POST['authority'];
    
    
    ?>
    <h1>アカウント登録画面</h1>
    <div class="confirm">
        <h2>名前（姓）</h2>
        <p><?php echo $_POST['family_name']; ?></p>
        <h2>名前（名）</h2>
        <p><?php echo $_POST['last_name']; ?></p>
        <h2>カナ（姓）</h2>
        <p><?php echo $_POST['family_name_kana']; ?></p>
        <h2>カナ（名）</h2>
        <p><?php echo $_POST['last_name_kana']; ?></p>
        <h2>メールアドレス</h2>
        <p><?php echo $_POST['mail']; ?></p>
        <h2>パスワード</h2>
        <p>●●●●●●●●</p>
        <h2>性別</h2>
        <p><?php echo $_POST['gender']; ?></p>
        <h2>郵便番号</h2>
        <p><?php echo $_POST['postal_code']; ?></p>
        <h2>住所（都道府県）</h2>
        <p><?php echo $_POST['prefecture']; ?></p>
        <h2>住所（市区町村）</h2>
        <p><?php echo $_POST['address_1']; ?></p>
        <h2>住所（番地）</h2>
        <p><?php echo $_POST['address_2']; ?></p>
        <h2>アカウント権限</h2>
        <p><?php echo $_POST['authority']; ?></p>
    </div>
</body>

</html>
