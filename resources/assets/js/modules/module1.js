/**
 * Simple function to export
 * @param text
 */
export function trace (text) {  console.log(text); }
export function traceAgain(text) {
    trace(text);
    trace(text);
}
export function callFirstFromModule1() {
    first.firstTrace();
}

