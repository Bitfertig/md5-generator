<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5 generator</title>
</head>
<body>
    <div class="container">


        <h1>MD5 generator</h1>
        
        <p>
            The MD5 message-digest algorithm is a widely used hash function producing a 128-bit hash value.
            Although MD5 was initially designed to be used as a cryptographic hash function, 
            it has been found to suffer from extensive vulnerabilities. It can still be used as a checksum to verify data integrity, 
            but only against unintentional corruption. It remains suitable for other non-cryptographic purposes, 
            for example for determining the partition for a particular key in a partitioned database.
        </p>
        <div class="text-right"><i><small>Source wikipedia.org/wiki/MD5</small></i></div>

        <?php
        $data = isset($_POST['data']) ? $_POST['data'] : '';
        $md5 = $data;
        ?>
        <form method="post" action="">
            <div class="row">
                <div class="col-6">
                    <label for="data"><h3>Text</h3></label>
                    <textarea name="data" id="data" class="w-100" rows="8"><?= htmlspecialchars($data) ?></textarea>
                </div>
                <div class="col-6">
                <label for="md5"><h3>MD5</h3></label>
                    <textarea id="md5" class="w-100" rows="8"><?= md5($md5) ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="submit">
                </div>
            </div>
        </form>


    </div>

<style>
.container {
	max-width: 900px;
	margin: 0 auto;
}
.row {
	display: flex;
	flex-direction: row;
}
.col-6 {
	flex: 0 0 50%;
	max-width: 50%;
	padding-right: 7.5px;
	padding-left: 7.5px;
}
.w-100 {
    width: 100%;
}
.text-right {
    text-align: right;
}
</style>

</body>
</html>