<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>dischi</title>
</head>
<body>
    <div id="app">
        <div v-for="disco in dischi">
            <img :src="disco.poster" :alt="disco.title">
            <h1>{{disco.title}}</h1>
            <h2>{{disco.author}}</h2>
            <h2>{{disco.genre}}</h2>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="script.js"></script>
</body>
</html>