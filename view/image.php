<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send to Telegram</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Send to Telegram</h1>
                <form method="post" action="/input">
                    <div class="form-group">
                        <label for="content">Message:</label>
                        <textarea class="form-control" id="content" name="text" rows="3" placeholder="Post matnini kiriting..."></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
