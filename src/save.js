import { useBlockProps } from '@wordpress/block-editor';
export default function save( { attributes: { field } } ) {
	return (
		<div { ...useBlockProps.save() }>
			<my-hello />
		</div>
	);
}
