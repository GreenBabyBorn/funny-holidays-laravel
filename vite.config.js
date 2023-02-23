import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/admin/plugins/fontawesome-free/css/all.min.css",
                "resources/admin/dist/css/adminlte.min.css",
                "resources/js/app.js",
                "resources/js/script.js",
                "resources/admin/plugins/jquery/jquery.min.js",
                "resources/admin/plugins/bootstrap/js/bootstrap.bundle.min.js",
                "resources/admin/dist/js/adminlte.min.js",
            ],
            refresh: true,
        }),
    ],
});
