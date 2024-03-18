import { Page, PageProps } from '@inertiajs/core';
import { FC, ReactNode } from 'react';

declare global {
  interface ServerResponsePage<P extends PageProps = PageProps> extends Page<P> {}
  var DASHBOARD_PREFIX: '__DASHBOARD__',
      WEBSITE_PREFIX: '__WEBSITE__'
  interface RC<P = {}> extends FC<P> {} // React Component
  interface RP<P = {}> extends FC<P & ServerResponsePage['props']> {} // React Page
  interface RPO<P = {}> extends FC<P & {children?: ReactNode}> {} // React Provider
}
