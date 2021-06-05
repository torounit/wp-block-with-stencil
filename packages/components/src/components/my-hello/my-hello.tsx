import { Component, h } from '@stencil/core';

@Component({
  tag: 'my-hello',
  styleUrl: 'my-hello.css',
  shadow: true,
})
export class MyHello {

  render() {
    return (
      <p>
        HELLO !?
      </p>
    );
  }

}
