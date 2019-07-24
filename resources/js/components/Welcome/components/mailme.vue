<template>
    <div
        class="no-gutters p-1 my-5 my-md-5 p-md-5 bg-light"
        id="mailme"
    >
        <h1>Contactez-moi</h1>

        <form method="POST" action="/api/send-mail">
            <div class="form-group">
                <label for="exampleFormControlInput1">Votre nom:</label>
                <input type="text" name="name" class="form-control" placeholder="Nom et prénom" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Votre email:</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Votre message:</label>
                <textarea class="form-control" name="description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Envoyez votre email</button>
        </form>
    </div>
</template>

<script>
    export default {

    }
</script>