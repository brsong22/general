package sortingAlgs;

import static org.junit.Assert.*;
import org.junit.Test;


public class SortingTest {
	int[] sorted = {1,2,3,4,5,6,7,8,9,10};
	int[] unsorted = {3,2,5,1,4,9,7,10,6,8};
	@Test
	public void testInsertionSort(){
		assertArrayEquals(sorted, Sorting.insertionSort(unsorted));
	}

	@Test
	public void testSelectionSort(){
		assertArrayEquals(sorted, Sorting.selectionSort(unsorted));
	}
	
	@Test
	public void testBubbleSort(){
		assertArrayEquals(sorted, Sorting.bubbleSort(unsorted));
	}
	
	@Test
	public void testQuickSort(){
		assertArrayEquals(sorted, Sorting.quickSort(unsorted));
	}
	
	@Test
	public void testMergeSort(){
		assertArrayEquals(sorted, Sorting.mergeSort(unsorted));
	}
}