import { Page, PageProps } from '@inertiajs/core';
import { FC, ReactNode } from 'react';

declare global {
  type ServerProps = PageProps & {
    layout_words?: Record<string, string>,
    page_words?: Record<string, string>
  };

  interface ServerResponsePage<P = {}> extends Page<P & ServerProps> {}

  var DASHBOARD_PREFIX: '__DASHBOARD__',
      WEBSITE_PREFIX: '__WEBSITE__';

  interface RC<P = {}> extends FC<P> {} // React Component
  interface RP<P = {}> extends FC<P & ServerResponsePage['props']> {} // React Page
  interface RPO<P = {}> extends FC<P & {children?: ReactNode}> {} // React Provider
  interface RL<P = {}> extends FC<P & {
    children?: ReactNode
    title?: string
  }> {} // Rect Layout
}
