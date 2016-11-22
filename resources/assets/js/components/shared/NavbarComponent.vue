<template>
    <ul id="navbar" style="z-index:1000">

        <li>
            <a href="/">Creations</a>
        </li>

        <li>
            <a href="/reviews">Reviews</a>
        </li>

        <li>
            <a href="/contact">Contact/Connect</a>
        </li>

        <li>
            <a href="/hire">Hire</a>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                <li>
                    <a href="/about">About Me</a>
                </li>
                <li>
                    <a href="/technologies">Technologies/Skills</a>
                </li>
                <li>
                    <a href="/experience">Background/Experience</a>
                </li>
            </ul>
        </li>
    </ul>

</template>

<script>
    require('bootstrap');

    module.exports = {
        template: '#navbar-template',
        data: function () {
            return {

            };
        },
        components: {},
        methods: {

        },
        props: [
            //data to be received from parent
        ],
        ready: function () {

        }
    };

</script>

