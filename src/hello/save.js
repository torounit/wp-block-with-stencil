import { useBlockProps, RichText } from '@wordpress/block-editor';
export default function save( { attributes: { field, content } } ) {
	return (
		<div { ...useBlockProps.save() }>
			<my-hello name={ field }>
				<RichText.Content value={ content } />
			</my-hello>
		</div>
	);
}
