/**
 * ES6 Class for an Input
 * 
 * @package Smartphoniker
 * @since 1.1.5
 */

"use strict";

/**
 * Class representing an input.
 */
export class Input {
    /**
     * @var {string} type Input type.
     */
    type;

    /**
     * @var {HTMLInputElement|HTMLTextAreaElement} element DOM-Element of the input.
     */
    element;

    /**
     * @var {String|Number} value
     */
    value;

    /**
     * Creates an input instance.
     * 
     * @param {HTMLInputElement|HTMLTextAreaElement} inputField
     * 
     * @since 1.1.5
     */
    constructor(inputField) {
        this.element = inputField;
        this.type = inputField.type;
        this.value = inputField.value;
    }

    /**
     * Whether the input is empty or not.
     *
     * @return {boolean}
     * 
     * @since 1.1.5
     */
    isNotEmpty() {
        return this.value.length > 0 && true;
    }
}