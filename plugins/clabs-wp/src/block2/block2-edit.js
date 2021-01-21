import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

import './block2-editor.scss';

export default function Edit() {
	return (
		<p { ...useBlockProps() }>
			{ __( 'Test block – hello from the editor 22222!', 'clabs' ) }
		</p>
	);
}
