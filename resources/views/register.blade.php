<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <br>
        <label for="gender">Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>
        <br>
        <label for="nationality">Nationality:</label><br>
        <select id="nationality" name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
            <option value="Other">Other</option>
        </select><br>
        <br>
        <label for="language">Language Spoken:</label><br>
            <input type="checkbox" value="indonesia" name="indonesia" id="indonesia">
            <label for="indonesia">Bahasa Indonesia</label><br>
            <input type="checkbox" value="english" name="english" id="english">
            <label for="english">English</label><br>
            <input type="checkbox" value="other" name="other" id="other">
            <label for="other">Other</label><br>
        <br>
        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio" rows="5" cols="30"></textarea><br>
        <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>