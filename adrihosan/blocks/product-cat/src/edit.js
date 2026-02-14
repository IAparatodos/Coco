import { __ } from '@wordpress/i18n';

import {
	InspectorControls, 
	useBlockProps 
} from '@wordpress/block-editor';

import {
	Panel,
	PanelBody,
	CheckboxControl,
	PanelRow,
	SelectControl,
	ToggleControl,
	__experimentalScrollable as Scrollable
} from '@wordpress/components';

import { useSelect } from '@wordpress/data';

import './editor.scss';

const Edit = ( props ) => {

	const blockProps = useBlockProps();

	const { attributes, setAttributes } = props;

	const { sel_categories, variant } = attributes;

	const { categories } = useSelect( ( select ) => {
		const { getEntityRecords } = select( 'core' );
		return {
			categories: getEntityRecords( 'taxonomy', 'product_cat', { per_page: -1 } ),
		}
	} );


	const onChangeCategory = (categoryID) => {
		const updatedCategories = sel_categories.includes(categoryID)
			? sel_categories.filter((id) => id !== categoryID)
			: [...sel_categories, categoryID];
		setAttributes({ sel_categories: updatedCategories });
	};

	var option_variants = [
		{value:'',label:__('Mostrar subcategorías y productos','doo')},
		{value:'subcat',label:__('Mostrar subcategorías','doo')},
		{value:'products',label:__('Mostrar productos','doo')},
		{value:'categories',label:__('Mostrar categorías','doo')},
	];

	return (
		<div { ...blockProps }>
			<InspectorControls>
				<Panel header={__('Ajuste Bloque productos/subcategorías por categoría','doo')}>
					<PanelBody>
						<PanelRow>
							<ToggleControl
								label={__('Mostrar el bloque sin cacheado','doo')}
								checked={attributes.no_cached}
								onChange={(newval) => setAttributes({ no_cached: newval })}
							/>
						</PanelRow>
						<PanelRow>
							<SelectControl
								label={__('Elementos a mostrar','doo')}
								value={attributes.variant}
								options={option_variants}
								onChange={(newval) => setAttributes({ variant: newval })}
							/>
						</PanelRow>
						{attributes.variant != 'subcat' &&
						attributes.variant != 'categories' &&
							<PanelRow>
								<ToggleControl
									label={__('Filtros búsqueda','doo')}
									checked={attributes.filters}
									onChange={(newval) => setAttributes({ filters: newval })}
								/>
							</PanelRow>
						}
						<Panel header={__('Seleccionar Categorías','doo')}>
							<Scrollable style={ { maxHeight: 350 } }>
								{categories && 
									categories.map((category) => (
										<CheckboxControl
											key={category.id}
											label={category.name}
											checked={sel_categories.includes(category.id)}
											onChange={() => onChangeCategory(category.id)}
										/>
									))
								}
							</Scrollable>
							{!categories &&
								<div>
									{__('Cargando...','doo')}
								</div>
							}
						</Panel>
					</PanelBody>
				</Panel>
			</InspectorControls>
			<div>
				<Panel header={ __('CATEGORÍAS DE PRODUCTO','doo') + '  (' + option_variants.find((option) => option.value === variant).label + ')' + ' ' + (attributes.filters && attributes.variant != 'subcat' && attributes.variant != 'categories' ? __('** Con filtros **','doo') : '') }>
					<Scrollable style={ { maxHeight: 800 } }>
						{categories && 
							categories.map((category) => (
								<CheckboxControl
									key={category.id}
									label={category.name}
									checked={sel_categories.includes(category.id)}
									onChange={() => onChangeCategory(category.id)}
								/>
							))
						}
					</Scrollable>
					{!categories &&
						<div>
							{__('Cargando...','doo')}
						</div>
					}
				</Panel>
			</div>
		</div>
	);
};

export default Edit;
