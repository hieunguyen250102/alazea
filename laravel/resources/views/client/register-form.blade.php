<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alazea - Sing in</title>
    <link rel="stylesheet" href="http://localhost/alazea/public/assets/css/form.css">
    <!-- Favicon -->
    <link rel="icon" href="http://localhost/alazea/public/assets/img/core-img/favicon.ico">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="bg"></div>

    <form>
        <div class="form-field">
            <input type="text" placeholder="Full name" required />
        </div>
        <div class="form-field">
            <input type="email" placeholder="Email" required />
        </div>
        <div class="form-field">
            <input type="text" placeholder="Your phonenumber" required />
        </div>
        <div class="form-field">
            <input type="text" placeholder="Your address" required />
        </div>
        <input type="hidden" name="role" value="1">
        <input type="hidden" name="status" value="1">

        <div class="form-field">
            <input type="password" placeholder="Password" required />
        </div>
        <div style="display:flex;margin-bottom: 30px; justify-content:space-between">
            <div>
                <a style="color: #fff; text-decoration:none" href="/login">Have accoutn? Sign in now</a>
            </div>
            <div>
                <a style="color: #fff;text-decoration:none" href="/">Back</a>
            </div>
        </div>
        </div>
        <div class="form-field">
            <button class="btn" type="submit">Log in</button>
        </div>
    </form>
    <!-- partial -->

</body>

</html>