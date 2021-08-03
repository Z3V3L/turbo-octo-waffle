import './style.css'

import * as THREE from 'three';

import { ColladaLoader } from 'three/examples/jsm/loaders/ColladaLoader';

import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader';

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000);

const renderer = new THREE.WebGLRenderer();
renderer.setSize( window.innerWidth, window.innerHeight );
document.body.appendChild( renderer.domElement );

//adding Grid helper

const size = 20;
const divisions = 150;

const gridHelper = new THREE.GridHelper( size, divisions );
scene.add( gridHelper );

/*---- Adding a cube ----*/
const geometry = new THREE.BoxGeometry();
const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
const cube = new THREE.Mesh( geometry, material);

//scene.add( cube );
cube.position.y = 0.5;

// Move camera off the cube in (0, 1, 5).
camera.position.x = 4;
camera.position.y = 1;
camera.position.z = 10;

/*const loader = new ColladaLoader();
// loader.load( './models/collada/kawada-hironx.dae', function ( collada ) {
loader.load( 'Handgun_dae.dae', function ( collada ) {

    scene.add( collada.scene );

}, undefined, function ( error ) {

    console.error( error );

} ); */

const loader = new GLTFLoader();

loader.load( 'untitled.glb', function ( gltf ) {

    scene.add( gltf.scene );

}, undefined, function ( error ) {

    console.error( error );

} );



//Rendering scene
function animate() {
    /*requestAnimationFrame( animate );

    cube.rotation.x += 0.01;
    cube.rotation.y += 0.01;*/

    renderer.render( scene, camera );
}
animate();
