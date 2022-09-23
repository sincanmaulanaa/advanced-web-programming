<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<style>
    div {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    input {
        margin-bottom: 20px;
    }
</style>

<body>
    @include("components.nav")
    <div>
        <h1>Register</h1>
        <form>
            <input type="text"><br>
            <input type="text"><br>
            <input type="text"><br>
            <button>submit</button>
        </form>
    </div>
</body>

</html>
