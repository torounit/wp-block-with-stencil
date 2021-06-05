import {
	InspectorControls,
	RichText,
	useBlockProps,
} from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import './editor.scss';
/**
 * @return {WPElement} Element to render.
 */
export default function Edit( { attributes: { field }, setAttributes } ) {
	return (
		<div { ...useBlockProps() }>
			<InspectorControls>
				<PanelBody title={ 'Setting' }>
					<TextControl
						value={ field }
						label={ 'Setting' }
						onChange={ ( value ) => {
							setAttributes( {
								field: value,
							} );
						} }
					/>
				</PanelBody>
			</InspectorControls>
			<my-hello name={ field }>こんにちは！</my-hello>
		</div>
	);
}
