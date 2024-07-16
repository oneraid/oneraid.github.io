import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";
import { fileURLToPath, URL } from "url";
import path from "path";

// Mengonversi URL ke path
const __dirname = path.dirname(fileURLToPath(import.meta.url));

export default defineConfig({
  plugins: [react()],
  root: ".", // Atur root ke direktori proyek
  build: {
    outDir: "dist", // Direktori output untuk build
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, "index.html"), // Path ke file index.html
      },
    },
  },
  resolve: {
    alias: {
      "@": fileURLToPath(new URL("./src", import.meta.url)),
    },
  },
  server: {
    open: true, // Membuka browser secara otomatis
  },
});
