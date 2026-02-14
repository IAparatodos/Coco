import { __ } from '@wordpress/i18n';

import {
	InspectorControls, 
	useBlockProps 
} from '@wordpress/block-editor';

import {
	Panel,
	PanelBody,
	CheckboxControl,
	__experimentalScrollable as Scrollable
} from '@wordpress/components';

import { useSelect } from '@wordpress/data';

import ServerSideRender from '@wordpress/server-side-render';

import './editor.scss';

import metadata from './block.json';

const Edit = ( props ) => {

	const blockProps = useBlockProps();

	const { attributes, setAttributes } = props;

	const { posts } = attributes;

	const { all_posts } = useSelect( ( select ) => {
		const { getEntityRecords } = select( 'core' );
		return {
			all_posts: getEntityRecords( 'postType', 'post', {
				status: 'publish',
				per_page: -1,
				orderby: 'title',
				order: 'asc',
			} ),
		}
	} );

	const onChangePost = (postID) => {
		const updatedPosts = posts.includes(postID)
			? posts.filter((id) => id !== postID)
			: [...posts, postID];
		setAttributes({ posts: updatedPosts });
	};

	return (
		<div { ...blockProps }>
			<InspectorControls>
				<Panel header={__('Ajustes Bloque Grid Entradas','doo')}>
					<Panel header={__('Seleccionar Entradas','doo')}>
						<PanelBody>
							<Scrollable style={ { maxHeight: 350 } }>
								{all_posts && 
									all_posts.map((post) => (
										<CheckboxControl
											key={post.id}
											label={post.title.rendered}
											checked={posts.includes(post.id)}
											onChange={() => onChangePost(post.id)}
										/>
									))
								}
							</Scrollable>
							{!all_posts &&
								<div>
									{__('Cargando...','doo')}
								</div>
							}
						</PanelBody>
					</Panel>
				</Panel>
			</InspectorControls>
			<ServerSideRender
				block={metadata.name}
				attributes={attributes}
			/>
		</div>
	);
};

export default Edit;
