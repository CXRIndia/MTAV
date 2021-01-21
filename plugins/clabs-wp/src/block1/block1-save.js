import { __ } from '@wordpress/i18n';

import { useBlockProps } from '@wordpress/block-editor';

export default function save() {
	const blockProps = useBlockProps.save();

	return (
		<h2 { ...blockProps }>{attributes.textString}</h2>
	);
}
