<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/idCard.css">
</head>

<body>
    <div class="input_id_card">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card text-center shadow-lg border mt-5" style="width: 25rem;">
                        <h2>Create a virtual Id Card</h2>
                        <div class="card-body">
                            <form action="id_card.php" method="POST">
                                <label>Name : <span>*</span>
                                    <input type="text" name="user_name" id="" required>
                                </label>
                                <label>Phone : <span>*</span>
                                    <input type="text" name="user_phone" id="" required>
                                </label>
                                <label>Email : <span>*</span>
                                    <input type="email" name="user_email" id="" required>
                                </label>
                                <label>Course : <span>*</span>
                                    <input type="text" name="user_course" id="" required>
                                </label>
                                <label>Batch No : <span>*</span>
                                    <input type="number" name="user_batch" id="" required>
                                </label></br></br>
                                <input type="submit" name="btn" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>