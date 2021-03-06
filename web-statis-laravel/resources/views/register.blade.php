<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
        {{ csrf_field() }}
        <label for="fname">
            <p>First name:</p>
        </label>
        <input type="text" id="fname" name="fname" value="" />
        <label for="lname">
            <p>Last name:</p>
        </label>
        <input type="text" id="lname" name="lname" value="" />
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male" />
        <label for="male">Male</label><br />
        <input type="radio" id="female" name="gender" value="female" />
        <label for="female">Female</label><br />
        <input type="radio" id="other" name="gender" value="other" />
        <label for="other">Other</label><br />
        <label for="nationality">
            <p>Nationality:</p>
        </label>
        <div>
            <select name="nationality" id="nationality">
                <option value="indonesian">Indonesian</option>
                <option value="singaporean">Singaporean</option>
                <option value="malaysian">Malaysian</option>
                <option value="australian">Australian</option>
            </select>
        </div>
        <p>Language Spoken</p>
        <input type="checkbox" id="language1" name="language1" value="bahasa-indonesia" />
        <label for="language1">Bahasa Indonesia</label><br />
        <input type="checkbox" id="language2" name="language2" value="bahasa-inggris" />
        <label for="language2">English</label><br />
        <input type="checkbox" id="language3" name="language3" value="bahasa-lainnya" />
        <label for="language3">Other</label>
        <label for="w3review">
            <p>Bio:</p>
        </label>
        <textarea id="w3review" name="w3review" rows="8" cols="30"></textarea>
        <div>
            <input type="submit" value="Sign Up" />
        </div>
    </form>
</body>

</html>