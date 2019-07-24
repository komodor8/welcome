<template>
    <div class="no-gutters p-1 my-5 my-md-5 p-md-5 bg-danger">
        <h1>Contact me</h1>

        <form method="POST" action="/api/send-mail">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nom et prénom</label>
                <input type="text" name="name" class="form-control" placeholder="Nom et prénom">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
        </form>
    </div>
</template>

<script>
    export default {

    }
</script>