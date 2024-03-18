// Dependencies
import "@/config";
import Application from "@/App";

// React Library
import { createRoot } from 'react-dom/client';

// Inertia Library
import { createInertiaApp } from '@inertiajs/react';

// Laravel Library
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

createInertiaApp({
  title: (title) => `${title}`,
  resolve: (name) => resolvePageComponent(`./Pages/${name}/index.tsx`, import.meta.glob('./Pages/**/*.tsx')),
  setup({ el, App, props }) {
    const root = createRoot(el);
    root.render(
      <Application page={props.initialPage}>
        <App {...props} />
      </Application>
    );
  },
  progress: {
    color: '#4B5563',
  },
});
