import { Component, h, Prop, Host } from '@stencil/core';

@Component( {
	tag: 'my-hello',
	styleUrl: 'my-hello.css',
	shadow: true,
} )
export class MyHello {
	@Prop() name: string;

	render() {
		return (
			<Host>
				<div>
					<p>HELLO { this.name }!?</p>
					<slot />
				</div>
			</Host>
		);
	}
}
