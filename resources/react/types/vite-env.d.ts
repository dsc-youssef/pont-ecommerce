/// <reference types="vite/client" />

import {AxiosInstance} from 'axios';
import { ReactNode } from 'react';
import ziggyRoute, {Config as ZiggyConfig} from 'ziggy-js';

declare global {

  interface Window {
    axios: AxiosInstance;
  }
  var route: typeof ziggyRoute,
    Ziggy: ZiggyConfig;

  interface ApplicationProps {
    children: ReactNode,
    page: ServerResponsePage
  }

}
