<template>
    <header>
        <header>
            <nav class="navbar navbar-expand-md bg-body-tertiary navbar-light" data-bs-theme="dark">
                <div class="container-fluid bg-dark d-flex justify-content-between">
                    <div class="navbar-brand">
                        <img class="img-logo" src="../../images/logo.png" alt="" />
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">

                        <!-- torna home guest -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/"></a>
                            </li>
                        </ul>

                        <!-- login amministratore -->
                        <div class="nav-right d-flex align-items-center">
                            <span class="nav-link text-white d-none d-md-block">Sei un amministratore?</span>
                            <a class="nav-link text-white mx-3" href="http://127.0.0.1:8000/admin">Accedi</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </header>
</template>

<script>
    export default {
        name: "Header",
    };
</script>

<style lang="scss" scoped>
    .navbar {
        padding: 0;
        border-bottom: 1px solid #00CCBC;
    }

    .nav-right {
        margin-right: 30px;
    }

    .img-logo {
        width: 50px;
    }

    li {
        margin: 5px;
        border-bottom: 1px solid transparent;
    }

    li:hover {
        border-bottom-color: #00CCBC;
    }
</style>
