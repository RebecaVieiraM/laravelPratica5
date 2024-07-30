<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicionario</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">    
    <style>
        body {
            font-family: "Inter", sans-serif;
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 1024px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        main > table {
            width: 100%;
            border-collapse: collapse;
        }

        main > table td,
        main > table th {
            border-bottom: 1px solid #000;
            padding: .25rem;
            text-align: center;
        }

        main > table tr:hover {
            background-color: #ccc;
        }

        .grid-cabecalho {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .grid-cabecalho > a {
            padding: .5rem 1.5rem;
            background-color: #ccc;
            border-radius: .5rem;
            color: #000;
            text-decoration: none;
        }

        .grid-cabecalho > a:hover {
            background-color: #aaa;
        }
    </style>
</head>
<body>
    <main>
        @yield('conteudo')  
    </main>
</body>
</html>