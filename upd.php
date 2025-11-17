<?php
// الاتصال بقاعدة البيانات
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // التحقق من وجود معرّف المنتج
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $p_name = $_POST['p_name'];
        $phone = $_POST['phone'];
        $hur = $_POST['hur'];
        $despro = $_POST['despro'];
        $price = $_POST['price'] . ' $';

        // التحقق من أن 'serv' هو مصفوفة قبل استخدام implode
        if (is_array($_POST['serv'])) {
            $serv = implode(',', $_POST['serv']);
        } else {
            $serv = $_POST['serv'];
        }

        // إعداد الاستعلام لتحديث البيانات
        $sql = "UPDATE products SET p_name = :p_name, phone = :phone, serv = :serv, hur = :hur, despro = :despro, price = :price WHERE pro_id = :id";
        $stmt = $conn->prepare($sql);

        // ربط القيم مع المعلمات المكانية
        $stmt->bindParam(':p_name', $p_name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':serv', $serv);
        $stmt->bindParam(':hur', $hur);
        $stmt->bindParam(':despro', $despro);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':id', $id);

        // تنفيذ الاستعلام والتحقق من نجاح العملية
        if ($stmt->execute()) {
            // إعادة التوجيه إلى settings.php بعد نجاح التحديث
            header("Location: settings.php");
            exit();
        } else {
            $errorInfo = $stmt->errorInfo();
            echo "Error: " . $errorInfo[2];
        }
    }
} else {
    // عرض البيانات الحالية
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // جلب البيانات من قاعدة البيانات
        $sql = "SELECT * FROM products WHERE pro_id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- main css file -->
                <link href="cssFiles/GodWebMain.css" rel="stylesheet">
                <link href="cssFiles/upd.css" rel="stylesheet">
                <!--normalize file -->
                <link rel="stylesheet" href="cssFiles/normalize.css">
                <!-- google fonts -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;0,800;1,200&display=swap" rel="stylesheet">
                <!-- font awsome files -->
                <link rel="stylesheet" href="cssFiles/all.min.css">
                <title>Update</title>
            </head>
            <body>
                <header>
                    <div class="container">
                        <h2 class="logo">GetWeb</h2>
                        <span><a href="employessdash.php"><i class="fa-solid fa-house"></i></a></span>
                    </div>
                </header>
                <div class="content">
                    <div class="form-container">
                        <h2>Edit project's details</h2>
                        <form action="upd.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['pro_id']; ?>">
                            <div class="item1">
                                <label for="p_name">Name:</label>
                                <input type="text" name="p_name" value="<?php echo $row['p_name']; ?>" required>
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>
                                <div class="check-container">
                                    <p>Required Service/s:</p>
                                    <div class="check-filed">
                                        <input type="checkbox" name="serv[]" id="edm" value="EDM" <?php echo (strpos($row['serv'], 'EDM') !== false) ? 'checked' : ''; ?>>
                                        <label for="edm">EDM(Enterprise Data Managment)</label>
                                    </div>
                                    <div class="check-filed">
                                        <input type="checkbox" name="serv[]" id="emarkt" value="e_marketing" <?php echo (strpos($row['serv'], 'e_marketing') !== false) ? 'checked' : ''; ?>>
                                        <label for="emarkt">E-marketing</label>
                                    </div>
                                    <div class="check-filed">
                                        <input type="checkbox" name="serv[]" id="plat" value="platform" <?php echo (strpos($row['serv'], 'platform') !== false) ? 'checked' : ''; ?>>
                                        <label for="plat">platform(website or mobile application)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="item2">
                                <div class="radio-container">
                                    <p>How Quickly Do You Need Your Project? </p>
                                    <div class="radio-field">
                                        <input type="radio" name="hur" id="vq" value="very quickly" <?php echo ($row['hur'] == 'very quickly') ? 'checked' : ''; ?>>
                                        <label for="vq">as soon as possible(less that week)</label>
                                    </div>
                                    <div class="radio-field">
                                        <input type="radio" name="hur" id="quic" value="quickly" <?php echo ($row['hur'] == 'quickly') ? 'checked' : ''; ?>>
                                        <label for="quic">Quickly(less than three weeks)</label>
                                    </div>
                                    <div class="radio-field">
                                        <input type="radio" name="hur" id="nor" value="normal" <?php echo ($row['hur'] == 'normal') ? 'checked' : ''; ?>>
                                        <label for="nor">Normal(in order)</label>
                                    </div>
                                    <div class="radio-field">
                                        <input type="radio" name="hur" id="slo" value="slowly" <?php echo ($row['hur'] == 'slowly') ? 'checked' : ''; ?>>
                                        <label for="slo">take your time(the cheapest one)</label>
                                    </div>
                                </div>
                                <label for="despro">Description:</label>
                                <textarea name="despro" placeholder="project description"><?php echo $row['despro']; ?></textarea>
                                <label for="price">Price:</label>
                                <input type="number" name="price" value="<?php echo str_replace(' $', '', $row['price']); ?>" required>
                                <input type="submit" value="Update" name="updSubmit">
                            </div>
                        </form>
                    </div>
                </div>
            </body>
            </html>
            <?php
        } else {
            echo "No record found.";
        }
    } else {
        echo "No ID provided.";
    }
}
?>
