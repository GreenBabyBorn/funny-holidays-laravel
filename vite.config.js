import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
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
