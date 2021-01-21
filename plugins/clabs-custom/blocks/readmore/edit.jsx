/* global React */

import PropTypes from 'prop-types';

/**
 * A React component to render the edit view of a Product block.
 */
export default class ReadmoreEdit extends React.PureComponent {
  render() {
    const {
      editor: {
        RichText,
      },
      i18n: {
        __,
      },
    } = wp;
    const {
      attributes: {
        ctaText = 'Read More',
      } = {},
      setAttributes,
    } = this.props;

    return (
      <div className="block-product">
        <div className="block-readmore-wrapper">
          <RichText
            label="Read More"
            className="block-readmore"
            onChange={(newValue) => {
              setAttributes({
                ctaText: newValue,
              });
            }}
            placeholder={__('Read More', 'clabs')}
            value={ctaText}
          />
        </div>
      </div>
    );
  }
}

// Set up initial props.
ReadmoreEdit.defaultProps = {
  attributes: {
    ctaText: 'Read More',
  },
};

// Set PropTypes for this component.
ReadmoreEdit.propTypes = {
  attributes: PropTypes.shape({
    ctaText: PropTypes.string,
  }),
  setAttributes: PropTypes.func.isRequired,
};
