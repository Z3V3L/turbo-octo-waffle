import './style.css'

document.querySelector('#app').innerHTML = `
  <h1>Hello Vite!</h1>
  <a href="https://vitejs.dev/guide/features.html" target="_blank">Documentation</a>
`
import * as THREE from 'three';
//import { ColladaLoader } from 'three';

const renderer = new THREE.WebGLRenderer();

            renderer.setSize( window.innerWidth, window.innerHeight );
            document.body.appendChild( renderer.domElement );

            const camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 500 );
            camera.position.set( 0, 0, 50 );
            camera.lookAt( 0, 0, 0 );

            const scene = new THREE.Scene();


            const material = new THREE.LineBasicMaterial({ color: 0x0000ff });

            const points = [];
            points.push( new THREE.Vector3(-10, 0, 0 ) );
            points.push( new THREE.Vector3(0, 10, 0 ) );
            points.push( new THREE.Vector3(10, 0, 0 ) );

            const geometry = new THREE.BufferGeometry().setFromPoints( points );

            const line = new THREE.Line( geometry, material );

            scene.add( line );


            const loader = new GLTFLoader();

            loader.load( 'path/to/model.glb', function ( gltf ) {

              scene.add( gltf.scene );

            }, undefined, function ( error ) {

              console.error( error );

            } );

            renderer.render( scene, camera);