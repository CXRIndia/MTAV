/* global React */

import attributes from './attributes';
import ReadmoreEdit from './edit';

const {
  blockEditor: {
    InnerBlocks,
  },
  blocks: {
    registerBlockType,
  },
  i18n: {
    __,
  },
} = wp;

registerBlockType(
  'clabs/readmore',
  {
    attributes,
    category: 'widgets',
    description: __(
      'Add Read more button',
      'clabs',
    ),
    edit: ReadmoreEdit,
    icon: <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M19 6H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H5V8h14v8z" /></svg>,
    keywords: [
      __('readmore', 'clabs'),
      __('button', 'clabs'),
    ],
    save: () => <InnerBlocks.Content />,
    supports: {
      html: true,
      multiple: false,
    },
    title: __('Read More Button', 'clabs'),
  },
);
