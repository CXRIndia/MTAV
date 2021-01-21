/* global React */

import attributes from './attributes';
import SampleBlock from './save';
import SampleBlockEdit from './edit';

const {
  blocks: {
    registerBlockType,
  },
  i18n: {
    __,
  },
} = wp;

registerBlockType(
  'clabs/sample-block',
  {
    attributes,
    category: 'widgets',
    description: __(
      'A sample block to demonstrate block structure and inclusion patterns.',
      'clabs',
    ),
    edit: SampleBlockEdit,
    icon: 'editor-insertmore',
    keywords: [
      __('sample', 'clabs'),
      __('block', 'clabs'),
    ],
    save: ({ attributes: blockAttributes }) => ( // eslint-disable-line react/prop-types
      <SampleBlock {...blockAttributes} /> // eslint-disable-line react/jsx-props-no-spreading
    ),
    supports: {
      html: false,
    },
    title: __('Sample Block', 'clabs'),
  },
);
