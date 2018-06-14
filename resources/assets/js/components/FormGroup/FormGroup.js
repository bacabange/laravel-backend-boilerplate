import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import PropTypes from 'prop-types';

export default class FormGroup extends Component {
	render() {
		return (
			<div className="form-group">
				<label className="form-control-label">{this.props.label}</label>
				<input
					name={this.props.name}
					placeholder={this.props.placeholder}
					className="form-control"
					type={this.props.type}
				/>
			</div>
		);
	}
}

FormGroup.propTypes = {
	placeholder: PropTypes.string,
	type: PropTypes.string,
	name: PropTypes.string,
	label: PropTypes.string,
};

FormGroup.defaultProps = {
	type: 'text',
};

if (document.getElementById('formGroup')) {
	// find element by id
	const element = document.getElementById('formGroup');

	// create new props object with element's data-attributes
	// result: {tsId: "1241"}
	const props = Object.assign({}, element.dataset);

	// render element with props (using spread)
	ReactDOM.render(<FormGroup {...props} />, element);
}
