import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';
/**
 * @return {WPElement} Element to render.
 */
export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<my-hello />
		</div>
	);
}
