
<body>
<div class="container mt-0 mx-10">
    <h1 class="mb-3">Liste des clients</h1>
    <a type="button" class="btn btn-primary mb-4" href="/tentative1/Client/ajoutClient.php">Ajouter client</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">numero client</th>
                <th scope="col">prenom</th>
                <th scope="col">nom</th>
                <th scope="col">email</th>
                <th scope="col">tel</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        
            

                <tr>
                    <td>$row[idClient]</td>
                    <td>$row[numeroClient]</td>
                    <td>$row[prenom]</td>
                    <td>$row[nom]</td>
                    <td>$row[email]</td>
                    <td>$row[tel]</td>
                    <td>
                        <a class='btn btn-warning btn-sm' href='/tentative1/Client/modifierClient.php?id=$row[idClient]'>Modifier</a>
                        <a class='btn btn-danger btn-sm' href='#' onclick='confirmDelete($row[idClient])'>Supprimer</a>
                    </td>
                </tr>
                ";
            
        ?>
        </tbody>
    </table>
</div>

<!-- Script JavaScript pour la confirmation -->
<script>
   
</script>
</body>
</html>

    

    

</body>
</html>